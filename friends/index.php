<?php
class User
{
    private $id;
    private $name;
    private $friends;
    private $friendRequests;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
        $this->friends = [];
        $this->friendRequests = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function addFriend($friendId)
    {
        $this->friends[] = $friendId;
    }

    public function getFriends()
    {
        return $this->friends;
    }

    public function addFriendRequest($friendId)
    {
        $this->friendRequests[] = $friendId;
    }

    public function removeFriendRequest($friendId)
    {
        $index = array_search($friendId, $this->friendRequests);
        if ($index !== false) {
            unset($this->friendRequests[$index]);
        }
    }

    public function getFriendRequests()
    {
        return $this->friendRequests;
    }

}
class Friendship
{
    public static function sendFriendRequest($user1, $user2)
    {
        // Send a friend request from user1 to user2
        $user2->addFriendRequest($user1->getId());
    }

    public static function acceptFriendRequest($user1, $user2)
    {
        // Accept the friend request from user1 to user2
        $user1->addFriend($user2->getId());
        $user2->addFriend($user1->getId());

        // Remove the friend request from user2's pending requests
        $user2->removeFriendRequest($user1->getId());
    }

    public static function declineFriendRequest($user1, $user2)
    {
        // Decline the friend request from user1 to user2
        // Remove the friend request from user2's pending requests
        $user2->removeFriendRequest($user1->getId());
    }
}

$user1 = new User(1, "John");
$user2 = new User(2, "Alice");

// Send friend request
Friendship::sendFriendRequest($user1, $user2);

// Accept friend request
Friendship::acceptFriendRequest($user1, $user2);

// Get friends
$friends = $user1->getFriends();
foreach ($friends as $friendId) {
    // Retrieve friend's information using the ID and display it
    $friend = new User($friendId, "");
    $friendName = $friend->getName();
    $result = $friendId . " - " . $friendName;

    echo $result;
    echo $friend->getName();
}