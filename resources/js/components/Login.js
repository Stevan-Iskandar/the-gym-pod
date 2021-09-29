import axios from 'axios'
import React, { Component } from 'react'
import SweetAlert from 'react-bootstrap-sweetalert'

class Login extends Component {
    constructor (props) {
        super(props)
        this.state = {
            username:   '',
            password:   '',
            remember:   false,
            alert:      null,
            errors:     [],
        }
        this.handleFieldChange  = this.handleFieldChange.bind(this)
        this.handleCheckBox     = this.handleCheckBox.bind(this)
        this.handleLogin        = this.handleLogin.bind(this)
        this.hasErrorFor        = this.hasErrorFor.bind(this)
        this.renderErrorFor     = this.renderErrorFor.bind(this)
    }

    handleFieldChange (event) {
        this.setState({
            [event.target.name]: event.target.value
        })
    }

    handleCheckBox(event) {
        let name = event.target.name
        this.setState({
            [name]: !this.state[name]
        });
    }

    hasErrorFor (field) {
        return !!this.state.errors[field]
    }

    renderErrorFor (field) {
        if (this.hasErrorFor(field)) {
            return (
                <span className='invalid-feedback'>
                    <strong>{this.state.errors[field][0]}</strong>
                </span>
            )
        }
    }

    sweetAlert (title, text) {
        const getAlert = () => (
            <SweetAlert
                error
                title={title}
                onConfirm={() => this.hideAlert() }
                onCancel={this.hideAlert()}
                timeout={2000}
                confirmBtnText='Oke'
                >{text}
            </SweetAlert>
        );
        this.setState({
            alert: getAlert()
        });
    }

    // onSuccess () {
    //     this.props.history.push('/');
    // }

    hideAlert () {
        this.setState({
            alert: null
        });
    }

    handleLogin (event) {
        event.preventDefault()
        const login = {
            username: this.state.username,
            password: this.state.password,
            remember: this.state.remember,
        }
        axios.post('/api/login', login).then(response => {
            if (response.status == 200)
            this.props.history.push('/');
        }).catch(error => {
            // console.log(error.response)
            if (error.response.status == 422)
            this.setState({
                errors: error.response.data.errors
            })
            else
            return this.sweetAlert(`Error ${error.response.data.status}`, error.response.data.message);
        })
    }

    render () {
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-6'>
                        <div className='card'>
                        <div className='card-header'>Login</div>
                            <div className='card-body'>
                                <form onSubmit={this.handleLogin}>
                                    <div className='form-group'>
                                        <label htmlFor='username'>Username</label>
                                        <input
                                            id='username'
                                            type='text'
                                            className={`form-control ${this.hasErrorFor('username') ? 'is-invalid' : ''}`}
                                            name='username'
                                            value={this.state.username}
                                            onChange={this.handleFieldChange}
                                        />
                                        {this.renderErrorFor('username')}
                                    </div>
                                    <div className='form-group'>
                                        <label htmlFor='password'>Password</label>
                                        <input
                                            id='password'
                                            type='password'
                                            className={`form-control ${this.hasErrorFor('password') ? 'is-invalid' : ''}`}
                                            name='password'
                                            value={this.state.password}
                                            onChange={this.handleFieldChange}
                                        />
                                        {this.renderErrorFor('password')}
                                    </div>
                                    <div className="form-check">
                                        <input
                                            id='remember'
                                            type='checkbox'
                                            className='form-check-input'
                                            name='remember'
                                            defaultChecked={this.state.remember}
                                            onChange={this.handleCheckBox}
                                        />
                                        <label className='form-check-label' htmlFor='remember'>
                                            Remember Me
                                        </label>
                                    </div>
                                    <button className='btn btn-primary'>Create</button>
                                    {this.state.alert}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
export default Login
