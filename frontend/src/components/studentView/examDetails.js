import React from 'react';
import '../../../node_modules/bootstrap/dist/css/bootstrap.min.css'
import '../studentView/examDetails.css'

function examDetails(){
    return(
        <React.Fragment>

            <div className="container">
                    <div className="row">
                        <div className="col-md-3"></div>
                        <div className="examDetailsForm col-md-6">
                            <h1 className="heading text-center"><b><u>Exam Details</u></b></h1>
                            
                            <label className="label col-md-6 control-label"><b>Title:</b></label>
                            <div className="col-md-12">
                                <input type="text" className="form-control shadow-none" name="name" placeholder="Enter Examination Title" required/>
                            </div>

                            <label className="label col-md-6 control-label"><b>Date and Time:</b></label>
                            <div className="col-md-12">
                                <input type="datetime-local" className="form-control shadow-none" name="name" required/>
                            </div>

                            <label className="label col-md-6 control-label"><b>Duration (In Minutes):</b></label>
                            <div className="col-md-12">
                                <input type="number" className="form-control shadow-none" name="name" placeholder="Enter Duration in Minutes" required/>
                            </div>

                            <label className="label col-md-6 control-label"><b>Total Question:</b></label>
                            <div className="col-md-12">
                                <input type="number" className="form-control shadow-none" name="name" placeholder="Enter Total Question Count" required/>
                            </div>

                            <label className="label col-md-6 control-label"><b>Marks of Correct Answers:</b></label>
                            <div className="col-md-12">
                                <input type="number" className="form-control shadow-none" name="name" placeholder="Enter Number" required/>
                            </div>

                            <label className="label col-md-6 control-label"><b>Marks of Wrong Answers:</b></label>
                            <div className="col-md-12">
                                <input type="number" className="form-control shadow-none" name="name" placeholder="Enter Number" required/>
                            </div>

                            <input type="submit" className="final shadow-none" value="Submit"/>
                            <input type="reset" className="final shadow-none" value="Reset"/>

                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div>
                        <h1>hi</h1>
                    </div>
                </div>

        </React.Fragment>
    );
}


export default examDetails;