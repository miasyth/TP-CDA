<?php
require_once "../helpers/DateHelper.php";
class Client
{

    private ?int $id;
    private ?string $numeroClient;
    private ?string $nom;
    private ?string $prenom;
    private ?DateTime $dateNaissance;
    private ?string $telephone;
    private ?string $email;
    private ?string $adresse;

    public function __construct(
        ?string $numeroClient = null,
        ?string $nom = null,
        ?string $prenom = null,
        ?DateTime $dateNaissance = null,
        ?string $telephone = null,
        ?string $email = null,
        ?string $adresse = null
    ) {

        $this->numeroClient = $numeroClient;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->telephone = $telephone;
        $this->email = $email;
        $this->adresse = $adresse;
    }





    /**
     * Get the value of id
     *
     * @return  mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param   mixed  $id  
     *
     * @return  self
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of numeroClient
     *
     * @return  mixed
     */
    public function getNumeroClient(): string
    {
        return $this->numeroClient;
    }

    /**
     * Set the value of numeroClient
     *
     * @param   mixed  $numeroClient  
     *
     * @return  self
     */
    public function setNumeroClient(string $numeroClient)
    {
        $this->numeroClient = $numeroClient;
    }

    /**
     * Get the value of nom
     *
     * @return  mixed
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param   mixed  $nom  
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of prenom
     *
     * @return  mixed
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param   mixed  $prenom  
     *
     * @return  self
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of dateNaissance
     *
     * @return  mixed
     */
    public function getDateNaissance(): ?DateTime
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @param   mixed  $dateNaissance  
     *
     * @return  self
     */
    public function setDateNaissance(?DateTime $dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * Get the value of telephone
     *
     * @return  mixed
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @param   mixed  $telephone  
     *
     * @return  self
     */
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Get the value of email
     *
     * @return  mixed
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param   mixed  $email  
     *
     * @return  self
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of adresse
     *
     * @return  mixed
     */
    public function getAdresse(): string
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @param   mixed  $adresse  
     *
     * @return  self
     */
    public function setAdresse(string $adresse)
    {
        $this->adresse = $adresse;
    }

    public function toArray(): array
    {
        $tab=[];
        $tab[]=$this->id;
        $tab[]=$this->numeroClient;
        $tab[]=$this->nom;
        $tab[]=$this->prenom;
        $tab[]=$this->dateNaissance->format("Y-m-d");
        $tab[]=$this->telephone ;
        $tab[]=$this->email;
        $tab[]=$this->adresse; 
        return $tab;
    }

    public static function ClientFromArray(array $tab): ?Client
    {
        $client = new static();
        foreach ($tab as $key => $value) {
            if ($key !== "dateNaissance") {
                $client->$key = $value;
            } else {
                $client->setDateNaissance( DateHelper::toDateTime($value));
            }
        }
        return $client;
    }


    public static function  ClientEnterKeybord(): Client
    {
        echo "Nouveau Client : \n";
        $client = new static();
        $client->nom = readline("Nom ? ");;
        $client->prenom = readline("prenom ? ");;
        
        $dateNaissanceString = readline("Date de naissance (format: AAAA-MM-JJ) ? ");;
        $client->dateNaissance  = DateHelper::toDateTime($dateNaissanceString);
        $client->telephone = readline("Telephone ? ");
        $client->email = readline("Email ? ");;
        $client->adresse = readline("Adresse ? ");;
        return $client;
    }
   
}
