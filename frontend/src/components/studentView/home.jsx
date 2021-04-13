import React, { Component } from 'react';
// import Header from './Header';
// import StuSignin from './studentSignIn';
import ExamDetails from './examDetails';

class home extends Component {
    state = {  }
    render() { 
        return ( 
            <div className="home">
                {/* <Header />
                <StuSignin /> */}
                <ExamDetails/> 
            </div>
         );
    }
}
 
export default home;