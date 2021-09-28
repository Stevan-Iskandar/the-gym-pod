import axios from 'axios'
import React, { Component } from 'react'

class Dashboard extends Component {
    constructor (props) {
        super(props)
        this.state = {
            status: '',
        }
    }

    render () {
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col-md-6'>
                        <div className='card'>
                        <div className='card-header'>Create new project</div>
                            <div className='card-body'>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
export default Dashboard
