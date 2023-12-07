<?php
class Utente
{
    private string $nome;
    private string $cognome;
    private string $email;
    private string $password;

    public function __construct($nome, $cognome, $email, $password)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->email = $email;
        $this->password = $password;
    }
    public function getCognome(): string
    {
        return $this->cognome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
}
