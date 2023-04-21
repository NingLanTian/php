<?php
class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $created_at;

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->created_at = new DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function validateName() {
        // Правила валидации имени
    }

    public function validateEmail() {
        // Правила валидации email
    }

    public function validatePassword() {
        // Правила валидации пароля
    }
}

class Comment {
    private $user;
    private $text;
    private $created_at;

    public function __construct($user, $text) {
        $this->user = $user;
        $this->text = $text;
        $this->created_at = new DateTime();
    }

    public function getUser() {
        return $this->user;
    }

    public function getText() {
        return $this->text;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }
}

// Создание пользователей
$user1 = new User(1, 'abc', 'abc@gmail.com', '123');
$user2 = new User(2, 'bbc', 'bbc@gmail.com', '456');

// Создание комментариев
$comment1 = new Comment($user1, 'Привет!');
$comment2 = new Comment($user2, 'Как дела?');
$comment3 = new Comment($user1, 'Отлично, спасибо!');

// Сбор комментариев в коллекцию
$comments1 = array($comment1);
$comments2 = array($comment2);
$comments3 = array($comment3);

// Вывод комментариев, созданных после заданной даты
$datetime = new DateTime('2023-04-01');

foreach ($comments1 as $comment) {
    if ($comment->getUser()->getCreatedAt() > $datetime) {
        echo $comment->getText();
    }
}
?>
    <br>
<?php
foreach ($comments2 as $comment) {
    if ($comment->getUser()->getCreatedAt() > $datetime) {
        echo $comment->getText();
    }
}
?>
    <br>
<?php
foreach ($comments3 as $comment) {
    if ($comment->getUser()->getCreatedAt() > $datetime) {
        echo $comment->getText();
    }
}
?>