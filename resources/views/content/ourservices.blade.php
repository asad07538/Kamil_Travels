

<div class="row p-5"  style="background-color: white;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12">
          <h3 class="text-center">Our Services</h3>
      </div>
      <div class="card col-md-2 col-sm-6 p-4 m-3 text-center  dashcards">
        <strong>Bookings</strong><br>
        <p>Any time</p>
        {% if user.is_authenticated %}
        <a   class="homea btn btn-primary" style="color:white;">View</a>
        {% endif %}
      </div>
      <div class="card col-md-2 col-sm-6 p-4 m-3 text-center  dashcards" >
        <strong>Refunds</strong><br>
        <p>We Care Refunds</p>
        {% if user.is_authenticated %}

        <a   class="btn btn-primary" style="color:white;">View</a>
        {% endif %}
      </div>
      <div class="card col-md-2 col-sm-6 p-4 m-3 text-center  dashcards" >
        <strong>Tickets</strong><br>
        <p>Get Your Tickets</p>
        {% if user.is_authenticated %}
        <a   class="homea btn btn-primary" style="color:white;">View</a>
        {% endif %}
      </div>
      {% if user.is_authenticated %}
      <div class="card col-md-2 col-sm-6 p-4 m-3 text-center  dashcards" >
        <strong>Banks</strong><br>
        <p>Detail and Transactions </p>
        <a   class="homea btn btn-primary" style="color:white;">View</a>
      </div>
      {% endif %}
<!--       {% if user.is_authenticated %}
      <div class="card col-md-3 col-sm-6 p-4 m-3 text-center  dashcards" >
        <strong>Payables</strong><br>
        <p>Get Your Tickets</p>
        <a   class="homea btn btn-primary" style="color:white;">View</a>
      </div>
      {% endif %}
      {% if user.is_authenticated %}
      <div class="card col-md-3 col-sm-6 p-4 m-3 text-center  dashcards" >
        <strong>Receivables</strong><br>
        <p>Get Your Tickets</p>
        <a   class="homea btn btn-primary" style="color:white;">View</a>
      </div>
      {% endif %} -->
      
    </div>
  </div>
</div>

