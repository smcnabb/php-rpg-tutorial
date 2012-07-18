<?php include 'html/header.php'; ?>

<h2>Query String</h2>

<p>
    <a href="step8.php?room=Pub&user=Steve">Click to try out a query string</a>
</p>

<hr />

<h2>Forms</h2>

<form action="step8.php" method="post">
    Room: <input type="text" name="room" value="Pub" /><br />
    User: <input type="text" name="user" value="Steve" /><br />
    <input type="submit" />
</form>

<hr />

<?php if (isset($_GET['room']) && isset($_GET['user'])): ?>

    Query string values: room=<?php echo $_GET['room']; ?>, user=<?php echo $_GET['user']; ?>

<?php elseif (isset($_POST['room']) && isset($_POST['user'])): ?>

    Form values: room=<?php echo $_POST['room']; ?>, user=<?php echo $_POST['user']; ?>

<?php endif; ?>

<?php include 'html/footer.php';

// TODO Add a new query string value, a new form value and output them

