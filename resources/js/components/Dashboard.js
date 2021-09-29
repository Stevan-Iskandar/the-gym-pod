import React, { Component } from 'react'
import Datatable from './Datatable'

class Dashboard extends Component {
    constructor (props) {
        super(props)
        this.state = {
            columns: [
                {
                    title:  'Pod Name',
                    data:   'pod.name',
                },
                {
                    title:  'User Name',
                    data:   'user.name',
                },
                {
                    title:  'Phone',
                    data:   'user.phone',
                },
                {
                    title:  'Status',
                    data:   'status',
                },
                {
                    title:  'Price',
                    data:   'pod.price',
                },
                {
                    title:  'Booking Date',
                    data:   'booking_date',
                },
                {
                    title:  'Booking Time',
                    data:   'booking_time',
                },
            ],
        }
    }

    render () {
        return (
            <div className='container py-4'>
                <div className='row justify-content-center'>
                    <div className='col'>
                        <div className='card'>
                        <div className='card-header'>Bookings</div>
                            <div className='card-body'>
                                <Datatable columns={this.state.columns} />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
export default Dashboard
