import React from 'react';
import './studentSignIn.css';
import '../../../node_modules/bootstrap/dist/css/bootstrap.min.css'
import PersonIcon from '@material-ui/icons/Person';
import KeyboardOutlinedIcon from '@material-ui/icons/KeyboardOutlined';
import LockIcon from '@material-ui/icons/Lock';

function studentSingin() {
    return(
        <React.Fragment>
            <div className="mainContainer">
                <div className="container signinContainer">
                    <div className="loginContainer">
                        <span>
                            <strong> Login </strong>
                        </span>
                    </div>

                    <div className="usernameRow">
                        <div className=" row usernameContainer">
                            <div className="profileLogo"> <PersonIcon /> </div>
                            <div className=" usernameInp">
                                <input type="text" className="userInp" />
                            </div>
                            <div className=" virKey"> <KeyboardOutlinedIcon /> </div>
                        </div>
                    </div>

                    <div className="PasswordRow">
                        <div className=" row passwordContainer">
                            <div className="passLogo"> <LockIcon /> </div>
                            <div className=" usernameInp">
                                <input type="password" className="passInp" />
                            </div>
                            <div className=" virKey"> <KeyboardOutlinedIcon /> </div>
                        </div>
                    </div>

                    <div className="signinRow">
                        <input type="submit" className="userSigninSubmit" value="Sign In" />
                    </div>
                </div>
            </div> 
            
        </React.Fragment>
    );
}

export default studentSingin;