<?php
session_start();

if(!isset($_SESSION['email']))
        {
            header('location:userlogin.php');
            exit;
        }
?>
<!DOCTYPE html>
<html lang="en">
<title>Upload MAR</title>
<link rel = "icon" type = "image/png" href = "/logo.png">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta charset="utf-8">
  <meta name="keywords" content="example, JavaScript Form Vadivdation, Sample registration form" />
  <meta name="description"
    content="This document is an example of JavaScript Form Vadivdation using a sample registration form. " />
  <divnk rel='stylesheet' href='js-form-vadivdation.css' type='text/css' />
  <script src="sample-registration-form-vadivdation.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Neonderthaw&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- select option -->


  <script>
    var subjectObject = {
      "technical Course": {
        "SWAYAM": ["12 weeks/40 hours(20 points)", "8 weeks/30 hours(16 points)", "T4 weeks/20 hours(10 points)", "2 weeks/10 hours(5 points)"],
        "NPTEL": ["12 weeks/40 hours(20 points)", "8 weeks/30 hours(16 points)", "T4 weeks/20 hours(10 points)", "2 weeks/10 hours(5 points)"],
        "Spoken Tutorial": ["12 weeks/40 hours(20 points)", "8 weeks/30 hours(16 points)", "T4 weeks/20 hours(10 points)", "2 weeks/10 hours(5 points)"],
        "Other technical course with certificate": ["12 weeks/40 hours(20 points)", "8 weeks/30 hours(16 points)", "T4 weeks/20 hours(10 points)", "2 weeks/10 hours(5 points)"]
      },
      "Fest": {
        "Tech fest": ["organizer(5 points)", "participent(3 points)"],
        "Fresher's welcome": ["organizer(5 points)", "participent(3 points)"],
        "Cultural fest": ["organizer(5 points)", "participent(3 points)"],
        "Teachers day": ["organizer(5 points)", "participent(3 points)"],
        "Other fest": ["organizer(5 points)", "participent(3 points)"]
      },
      "Rural Report": {
        "participant": ["5 points"]
      },
      "Tree plantation": {
        "numbder of tree planted : 1": ["1 points"],
        "numbder of tree planted : 2": ["2 points"],
        "numbder of tree planted : 3": ["3 points"],
        "numbder of tree planted : 4": ["5 points"],
        "numbder of tree planted : 5": ["6 points"],
        "numbder of tree planted : 6": ["7 points"],
        "numbder of tree planted : 7": ["8 points"],
        "numbder of tree planted : 8": ["8points"],
        "numbder of tree planted : 9": ["9 points"],
        "numbder of tree planted : 10": ["10 points"],

      },
      "Relife camps": {
        "Fund / material colluction for the relife camp": ["5 points"],
        "To be part of the relife camp ": ["20 points"]
      },
      "Participation": {
        "Debate": ["10 points"],
        "Group discussion": ["10 points"],
        "Tech quiz": ["10 points"],
        "Quiz": ["10 points"],
        "Seminer": ["10 points"],
        "Painting": ["10 points"],
        "Music-Dance": ["10 points"],
        "Other Art workshop": ["10 points"]
      },
      "Contributing to charitable trust / institution": {
        "Contribution/Donation": ["20 points"]
      },
      "Publication of Wall magazine (Institutional level)": {
        "Editor": ["10 points"],
        "Writer": ["6 points"]
      },
      "Publication (Beyond Institutional level)": {
        "News paper": ["Editor (10 points)"],
        "Magazine": ["Editor (10 points)"],
        "Blogs": ["Editor (10 points)"]
      },
      "Research Publication": {
        "Research Publication": ["15 points"]
      },
      "Innovation project (other then course curriculam": {
        "Project": ["30 points"],
      },
      "Blood donation": {
        "Bloods donation": ["6 points"],
        "Camp organizer": ["10 points"]
      },
      "Perticipaton in Sports": {
        "College level": ["5 points"],
        "University level": ["10 points"],
        "District level": ["12 points"],
        "State level": ["15 points"],
        "National/International level": ["20 points"]
      },
      "Cultural program": {
        "Dance": ["10 points"],
        "Drama ": ["10 points"],
        "Election": ["10 points"],
        "Music": ["10 points"],
        "Other program": ["10 points"]
      },
      "Member of professional socity": {
        "Member": ["10 points"]
      },
      "Student chapter": {
        "Student chapter": ["10 points"]
      },
      "Industrial training": {
        "BITM training(min. 3 days)": ["10 points"],
        "Projects": ["10 points"],
        "Indusrty visit & report(min. 3 days)": ["10 points"],
        "Hotel event managment training & report(min. 3 days)": ["10 points"]
      },
      "Photograpic activity in diff. club": {
        "Photography club": ["10 points"],
        "Cine club": ["10 points"],
        "Gitisansad": ["10 points"],
        "Other": ["10 points"]
      },
      "Prticipation in Yoga camp": {
        "Participation": ["10 points"]
      },
      "Community service & Allied activites": {
        "Community service": ["10 points"],
        "Allied activites": ["10 points"]
      },
      "Adventure sports with certification": {
        "Adventure sports": ["10 points"]
      },
      "Training to under previledge / Differently abled": {
        "under previledge": ["15 points"],
        "Differently abled": ["15 points"]
      },
      "Self-Entrepreneurship programme": {
        "To organise entrepreneurship programmes and workshops": ["10 points"],
        "To take part in entrepreneurship workshop and get certificate": ["5 points"],
        "Video film making on entrepreneurship": ["10 points"],
        "Submit business plan on any project": ["10 points"],
        "To work for start-up/as entrepreneur": ["20 points"]
      },
      "MAR activity during Lockdown": {
        "Theme Photography (photographs to be taken inside home, by selecting a particular theme) & publishing online": ["3 points"],
        "Video Film Making inside house using mobile phone & publishing online": ["5 points"],
        "Writing of poetry, story, blog & publishing online": ["4 points"],
        "Reviewing of story books, novels, films, documentaries,YouTube videos": ["4 points"],
        "Cooking recipes and/or cooking(with video documentation)": ["3 points"],
        "Recording of Song/Music(with photos/video documentation) & publishing online": ["5 points"],
        "Helping parents and family members inhouse hold work/matters. eg. cleaning, reorganization of furniture, washing, decoration etc": ["1 points"],
        "Creation of Social Networking Groups to spread social awareness and give messages": ["2 points"],
        "Mobile App development/Coding Solution & publishing": ["7 points"],
        "Learning of Foreign Languages with certification": ["6 points"]
      },
      " Activities based on univ. programes": {
        "Webinar/Webinar Series Attending": ["2 points"],
        "Webinar/Webinar Series Performing": ["5 points"],
        "Debate Attending": ["2 points"],
        "Debate Performing": ["5 points"],
        "Contributing to Digital Library": ["4 points"],
        "Programmes on Environmental Issues Attending": ["2 points"],
        "Programmes on Environmental Issues Performing": ["5 points"],
        "Programmes on Entrepreneurship Attending": ["2 points"],
        "Programmes on Entrepreneurship Performing": ["5 points"],
      },
    }
    window.onload = function () {
      var subjectSel = document.getElementById("course");
      var topicSel = document.getElementById("topic");
      var pointSel = document.getElementById("point");
      for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
      }
      subjectSel.onchange = function () {
        //empty Chapters- and Topics- dropdowns
        pointSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var y in subjectObject[this.value]) {
          topicSel.options[topicSel.options.length] = new Option(y, y);
        }
      }
      topicSel.onchange = function () {
        //empty Chapters dropdown
        pointSel.length = 1;
        //display correct values
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
          pointSel.options[pointSel.options.length] = new Option(z[i], z[i]);
        }
      }
    }
  </script>
  <style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #00135f;
}

li {
  float: left;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #f20909;
}
    body {
      background-image: url('bcrec3.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <ul>
    <li><a class="active" href="home.html"style="text-decoration:none;display:inline-block; color: white;">Home</a></li>
    <li><a href="https://www.makautwb.ac.in/datas/users/0-mar%20notice%20vc%20final.pdf"style="text-decoration:none;display:inline-block; color: white;">Mar & Moocs Details</a></li>
    <li style="float:right"><a href="logout.php"  style="text-decoration:none;display:inline-block; color: white;">Logout</a></li>
    <li style="float:right"><a href="moocs.php"style="text-decoration:none;display:inline-block; color: white;">Moocs</a></li>  
  </ul>
  <div>


    <form name='registration' style=" background:rgba(255, 255, 255,.7) ;padding: 20px;margin: 50px;">

      <br>
      <h1 align="center">Upload Mar Document</h1>
      <br>

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" placeholder="Enter name" class="form-control" id="name" required>
      </div>
      <br>

      <div class="form-group">
        <label for="roll">Roll no.</label>
        <input type="text" placeholder="Enter univ. name" class="form-control" id="roll" required>
      </div>
      <br>
      <div class="dropdown">
        <label for="year">Choose Year</label>
        <select name="year" id="year" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
          required>
          <option value="1st">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
          <option value="4th">4th</option>
        </select>
      </div>
      <br>

      <div class="dropdown">
        <label for="sem">Choose Sem</label>
        <select name="sem" id="sem" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
          required>

          <option value="1st">1st</option>
          <option value="2nd">2nd</option>
          <option value="3rd">3rd</option>
          <option value="4th">4th</option>
          <option value="5th">5th</option>
          <option value="6th">6th</option>
          <option value="7th">7th</option>
          <option value="8th">8th</option>
        </select>
      </div>
      <br>

      <label for="course">Activity:</label>
      <select name="course" id="course" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
        required>
        <option value="" selected="selected">Select Activity</option>
      </select>
      <br><br>

      <label for="topic">Topic:</label>
      <select name="topic" id="topic" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
        required>
        <option value="" selected="selected">Please select Activity first</option>
      </select>
      <br><br>

      <label for="point">Points:</label>
      Points: <select name="point" id="point" class="btn btn-primary dropdown-toggle" type="button"
        data-toggle="dropdown" required>
        <option value="" selected="selected">Please select topic first</option>
      </select>
      <br><br>


      <!-- <div class="dropdown">
  <label for="">Choose Domain</label>
  <select name="Course" id="Course"  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
   
  <option value="Course">SWAYAM, NPTEL</option>
  <option value="fest">fest organizer/participent</option>
  <option value="Rural">Rural report</option>
  <option value="Tree">Tree plantation</option>
  <option value="Relife">Relief camp</option>
  <option value="participation">debate, quiz, seminer, any performing art</option>
  <option value="charity">Charity</option>
  <option value="Magazine">Wall magazine</option>
  <option value="Blog">Blog publication</option>
  <option value="Research">Research Publocation</option>
  <option value="Project">Project(other then course curriculam</option>
  <option value="Blood">Blood Donation</option>
  <option value="Sports">Participation in Sports</option>
  <option value="Cultural">Cultural program</option>
  <option value="Member">Member of a Professional Socity</option>
  <option value="std. chapter">Student chapter</option>
  <option value="Industrial">Industrial Training</option>
  <option value="Photo">Photography</option>
  <option value="yoga">Yoga camp</option>
  <option value="Community">Community service & allied activity</option>
  <option value="ADV. Sport">Adventure Sport</option>
  <option value="under priviledge">Training to Under-prviledge</option>
  <option value="Entrepreneur">Entrepreneurship</option>
  <option value="MAR-lockdown">Special activity in locdown</option>
  <option value="UNIV. prog.">University Program</option>
</select>
</div> -->
      <br>
      <div class="form-group">
        <label for="describe">Describe</label>
        <input type="text" placeholder="Describe the activity and topic with appropiate words" class="form-control"
          id="des">
      </div>
      <br>
      <div class="form-group">
        <label for="formFileMultiple">Click to upload files</label>
        <br>

        <input type="file" id="formFileMultiple" multiple onchange="return fileValidation()"
          accept="image/x-png,image/gif,image/jpeg">
        <script>

          function fileValidation() {
            var fileInput = document.getElementById('formFileMultiple');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
            if (!allowedExtensions.exec(filePath)) {
              alert('Please upload only .jpeg/.jpg/.png/.gif file.');
              fileInput.value = '';
              return false;
            }
          }
        </script>
      </div>

      <br>

      <button type="button" class="btn btn-primary">Submit</button>

    </form>
  </div>

</body>

</html>