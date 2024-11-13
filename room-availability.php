<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Room Availability - Hotel Santi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .availability-section {
      padding: 4rem 0;
      background-color: #f8f9fa;
    }
    .availability-table {
      margin-top: 2rem;
    }
    .btn-back {
      margin-top: 2rem;
    }
  </style>
</head>

<body>
  <div class="container availability-section">
    <h2 class="text-center mb-4">Room Availability</h2>
    <p class="text-center">Check out our rooms, availability, occupancy, and pricing to find the best option for your stay.</p>

    <div class="table-responsive availability-table">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Room Type</th>
            <th>Availability</th>
            <th>Occupancy</th>
            <th>Price (per night)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Single Room</td>
            <td>Available</td>
            <td>1 Person</td>
            <td>$50</td>
          </tr>
          <tr>
            <td>Double Room</td>
            <td>Fully Booked</td>
            <td>2 People</td>
            <td>$80</td>
          </tr>
          <tr>
            <td>Suite</td>
            <td>Available</td>
            <td>Up to 4 People</td>
            <td>$150</td>
          </tr>
          <tr>
            <td>Deluxe Room</td>
            <td>Available</td>
            <td>2 People</td>
            <td>$120</td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>

    <a href="Index.html" class="btn btn-primary btn-back">Back to Main Page</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
