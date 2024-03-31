<?php require_once("../includes/header.inc.php"); ?>

<main class="container mt-5">
    <!-- Filtering date -->
    <form method="post">
        <hr>
        <h3>Choose a time for your booking:</h3><br>
        <label for="dateRange1">From:</label>
        <input type="text" id="dateRange1" name="startDate" placeholder="Select Date.." readonly="readonly" min="today" max="today + 10 days" />
        <!-- To -->
        <label for="dateRange2">To:</label>
        <input type="text" id="dateRange2" name="endDate" placeholder="Select Date.." readonly="readonly" min="today" max="today + 10 days" />
        <button type="button" class="btn btn-light" id="dateRangeClear">Clear</button>
        <button type="submit" class="btn btn-success" name="dateSubmit">Submit</button>
    </form>


    <!-- Form -->
    <form method=" post" hidden>
        <hr>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>

<?php require_once("../includes/footer.inc.php"); ?>