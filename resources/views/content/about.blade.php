

<div class="row p-3"  style="background-color:  white   ;">
  <div class="container">
    <div class="row justify-content-center text-center p-5">
        <h2>WE ARE AWWARED WINNING COMPANY </h2>
        <p>
            Over the year we have lots of experience in our field. In sit amet massa sapien. Vestibulum diam turpis, gravida in lobortis id, ornare a eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis nulla non elit dignissim suscipit. Duis lorem nulla, eleifend.>
        <p>
<!-- 
          <a href="{% url 'dashboard:pdf_view_new' %}"> pdf view </a>
          <a href="{% url 'dashboard:pdf_download_new' %}"> pdf download </a> -->
    </div>
  </div>
</div>

<style type="text/css">
  * {box-sizing: border-box}

/* Style the tab */
.tab {
  float: left;
  /*border: 1px solid #ccc;*/
  /*background-color: #f1f1f1;*/
  width: 30%;
  height: 300px;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  display: block;
  background-color: #F3F3F9 ;
  color: black;
  border-right: 1px solid black;
  border-bottom: 0px;
  padding: 22px 16px;
  width: 100%;
  /*border: none;*/
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
      font-size: 18px;
    line-height: 28px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  border-right: 2px solid black;
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  /*border: 1px solid #ccc;*/
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>


<script type="text/javascript">
  function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

  openCity(event, 'London');
</script>