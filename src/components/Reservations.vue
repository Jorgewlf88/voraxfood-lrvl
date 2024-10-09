<template>
  <div>
    <h2>Reservations</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Reservation ID</th>
            <th>Customer Name</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="reservation in reservations" :key="reservation.id">
            <td>{{ reservation.id }}</td>
            <td>{{ reservation.customerName }}</td>
            <td>{{ reservation.date }}</td>
            <td>
              <button class="btn btn-sm btn-outline-secondary">View</button>
              <button class="btn btn-sm btn-outline-primary ml-2">Edit</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Reservations',
  data() {
    return {
      reservations: [
        { id: 1, customerName: 'Alice Williams', date: '2023-05-26' },
        { id: 2, customerName: 'Charlie Brown', date: '2023-05-27' },
        { id: 3, customerName: 'David Miller', date: '2023-05-28' },
      ]
    }
  }
}
</script>