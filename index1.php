<?php
    include 'header1.php';
      

    
?>

<div class="jumbotron">
    <div class="display-3">SafeBuy</div>
    <p class="lead">We deliver all the essentials at your doorstep.</p>
    
</div>

<div class="content container-sm">
    <div id="topic" class="display-4">Shop by category:</div>
    <br><br>
    <div class="row">
        <div class="col-3">

            <div class="card" style="width: 18rem">
                <img style="height:275px" src="https://images.unsplash.com/photo-1587049016823-69ef9d68bd44?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Grocery</h5>
                    <p class="card-text">Joey doesn't share food, but we do.</p>
                    <a href="grocery.php" class="btn btn-outline-danger">Browse Grocery</a>
                </div>
            </div>
        </div>
        <div class="col-3">

            <div class="card" style="width: 18rem;">
                <img src="https://images.unsplash.com/photo-1584362917137-56406a73241c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Medicine</h5>
                    <p class="card-text">Don't risk going to the doctor when you can get medicine at your doorstep
                    </p>
                    <a href="medicine.php" class="btn btn-outline-danger">Browse medicine</a>
                </div>
            </div>
        </div>
        <div class="col-3">

            <div class="card" style="width: 18rem;">
                <img style="height:255px" src="https://images.unsplash.com/photo-1516876345887-6dd74f80787a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fitness Equipments</h5>
                    <p class="card-text">So what you can't go to the gym? You can still stay fit at home.</p>
                    <a href="fitness.php" class="btn btn-outline-danger">Browse Fitness</a>
                </div>
            </div>
        </div>
        <div class="col-3">

            <div class="card" style="width: 18rem;">
                <img style="height: 255px" src="https://images.unsplash.com/photo-1587032154988-52646414698d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Masks, Gloves and Sanitizers</h5>
                    <p class="card-text">The most essential products needed during this pandemic.</p>
                    <a href="mask.php" class="btn btn-outline-danger">Browse Masks</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>