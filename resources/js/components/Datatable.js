import './../../css/jquery.dataTables.css'
import React, { Component } from 'react'

const $     = require('jquery')
$.DataTable = require('datatables.net')

export default class Datatable extends Component {
    componentDidMount () {
        axios.get('/api/table/bookings').then(response => {
            // console.log(response.data)
            // console.log(this.el)
            this.$el = $(this.el)
            this.$el.DataTable({
                data:       response.data,
                columns:    this.props.columns,
            })
        })
    }

    componentWillMount () {
    }

    render () {
        return <div>
            <table className='table table-borderless display' width='100%' ref={el => this.el = el}></table>
        </div>
    }

}
