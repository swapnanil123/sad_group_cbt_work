import React from 'react';
import './Header.css';
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import profile from'./images/istockphoto-1006790052-612x612.jpg'

function Header() {
  return (
    <React.Fragment>
      <header className="headerPart">
        <div className="col-10 details">
          <div className="row scName">
            <span className="system">System Name :</span>
            <span className="candidate">Candidate Name :</span>
          </div>

          <div className="row scDetails">
            <span className="systemName">C012</span>
            <span className="candidateName">Swapananil Paul</span>
          </div>

          <div className="row moreDetails">
            <span className="info"> Contact invigilator if the Name and Photograph <br></br> displayed on the screen is not yours </span>
            <span className="row subjectDetails">
              <span className="subject"> Subject :</span>
              <span className="subjectName">Computer Science</span>
            </span>
          </div>
        </div>
        
        <div className="col-2 profilePhoto">
          <img className="img-fluid" src={profile} alt="profile Pic" height="150px" width="150px"></img>
        </div>
      </header>
    </React.Fragment>
  );
}

export default Header;
