import React, { Component } from 'react';
import Header from './Header';
import StuSignin from './studentSignIn';

class home extends Component {
    state = {  }
    render() { 
        return ( 
            <div className="home">
                <Header />
                <StuSignin />
            </div>
         );
    }
}
 
export default home;