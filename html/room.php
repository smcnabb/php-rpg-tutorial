
<h1><?php echo htmlentities($room->getName()); ?></h1>

<p>
    Hi <?php echo htmlentities($user->getName()); ?>
</p>

<p>
    <?php echo htmlentities($room->getDescription()); ?>
</p>

<?php $connections = $room->getConnections(); ?>

<?php if (!empty($connections)): ?>
    <h2>Exits:</h2>
    <ul>
        <?php foreach ($connections as $direction => $connectedRoom): ?>
            <li>
                <a href="?room=<?php echo urlencode($connectedRoom); ?>">
                    <?php echo htmlentities(ucwords($direction)); ?> -&gt;
                        <?php echo htmlentities($rooms->getRoom($connectedRoom)->getName()); ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php if (!empty($users)): ?>
    <h2>Users:</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo htmlentities($user->getName()); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<hr />

<form action="" method="post">
    Chat: <input type="text" name="chat" size="50" maxlength="255" /> <input type="submit" />
</form>

<ul>
    <?php foreach ($chats as $chat): ?>
        <li>
            <strong>
                <?php echo htmlentities($chat->getUserName()); ?>:
            </strong>
            <?php echo htmlentities($chat->getMessage()); ?>
        </li>
    <?php endforeach; ?>
</ul>
