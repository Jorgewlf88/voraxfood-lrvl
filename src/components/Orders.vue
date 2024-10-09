<template>
  <div>
    <h2>Orders</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer Name</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="order in orders" :key="order.id">
            <td>{{ order.id }}</td>
            <td>{{ order.customerName }}</td>
            <td>{{ order.status }}</td>
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
  name: 'Orders',
  data() {
    return {
      orders: [
        { id: 1, customerName: 'John Doe', status: 'Pending' },
        { id: 2, customerName: 'Jane Smith', status: 'Completed' },
        { id: 3, customerName: 'Bob Johnson', status: 'Processing' },
      ]
    }
  }
}
</script>