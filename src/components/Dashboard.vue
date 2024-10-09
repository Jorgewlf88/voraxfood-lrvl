<template>
  <div>
    <h2>Dashboard Overview</h2>
    <div class="row mt-4">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pending Orders</h5>
            <p class="card-text display-4">{{ pendingOrders }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Upcoming Reservations</h5>
            <p class="card-text display-4">{{ upcomingReservations }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
  data() {
    return {
      pendingOrders: 5,
      upcomingReservations: 3
    }
  }
}
</script>