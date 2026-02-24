<?php
require_once __DIR__ . "/../models/Note.php";

class NoteController {

    private $note;

    public function __construct($db) {
        $this->note = new Note($db);
    }

    public function index() {
        return $this->note->getAll();
    }

    public function store($title, $description) {
        return $this->note->create($title, $description);
    }

    public function update($sno, $title, $description) {
        return $this->note->update($sno, $title, $description);
    }

    public function delete($sno) {
        return $this->note->delete($sno);
    }
}