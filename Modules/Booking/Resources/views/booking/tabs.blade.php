<ul class="nav nav-tabs" id="myTab" role="tablist" >
  <li class="nav-item">
    <a class="nav-link active" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="ticket" aria-selected="true">Tickets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="car-tab" data-toggle="tab" href="#cartab" role="tab" aria-controls="car" aria-selected="false">Cars</a>
  </li>
<!--   <li class="nav-item">
    <a class="nav-link" id="g-ticket-tab" data-toggle="tab" href="#g-ticket" role="tab" aria-controls="g-ticket" aria-selected="true">Group Tickets</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hoteltab" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="false">Visa</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Tour-tab" data-toggle="tab" href="#Tour" role="tab" aria-controls="contact" aria-selected="false">Tour</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="contact" aria-selected="false">Others</a>
  </li> -->
</ul>

<div class="tab-content" id="myTabContent" >
  <div class="tab-pane fade show active" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
      @include('booking::booking.ticket.index')
  </div>
  <div class="tab-pane fade " id="g-ticket" role="tabpanel" aria-labelledby="g-ticket-tab">
      @include('booking::booking.groupticket.index')

  </div>
  <div class="tab-pane fade" id="cartab" role="tabpanel" aria-labelledby="car-tab">
      @include('booking::booking.car.index')
    
  </div>
  <div class="tab-pane fade" id="hoteltab" role="tabpanel" aria-labelledby="hotel-tab">
      @include('booking::booking.hotel.index')
  </div>
  <div class="tab-pane fade" id="visa" role="tabpanel" aria-labelledby="visa-tab">
    <h2>Visa</h2>
      @include('booking::booking.visa.index')    
  </div>
  <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
    <h2>Visa</h2>
    <h2>Tour</h2>
    
  </div>
  <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="other-tab">
    <h2>Other</h2>

  </div>
</div>
<hr>


