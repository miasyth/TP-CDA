<?php

require_once "ConstantesDao.php";

class ClientDao
{

    private const FILE_SAVE_CLIENT = "c:/envdev/donnees/save_clients.csv";
    private const FILE_CPT_CLIENT = "c:/envdev/donnees/compteurs/cpt_clients.txt";
    
    private const CHAMP_ID = "id";
    private const CHAMP_NUMERO_CLIENT = "numeroClient";
    private const CHAMP_NOM = "nom";
    private const CHAMP_PRENOM = "prenom";
    private const CHAMP_DATE_NAISSANCE = "dateNaissance";
    private const CHAMP_TELEPHONE = "telephone";
    private const CHAMP_EMAIL = "email";
    private const CHAMP_ADRESSE = "adresse";
    private const ENTETES_CLIENT = [ClientDao::CHAMP_NUMERO_CLIENT,ClientDao::CHAMP_NOM,ClientDao::CHAMP_PRENOM,ClientDao::CHAMP_DATE_NAISSANCE,ClientDao::CHAMP_TELEPHONE,ClientDao::CHAMP_EMAIL ,ClientDao::CHAMP_ADRESSE];

   
    public function saveAll(array $clients): void
    {
        $handle = fopen(ClientDao::FILE_SAVE_CLIENT, ConstantesDao::FILE_OPTION_W_PLUS);
        if (!empty(ClientDao::ENTETES_CLIENT)) {
            fputcsv($handle, ClientDao::ENTETES_CLIENT, ConstantesDao::DELIM);
        }
        foreach ($clients as $client) {
            fputcsv($handle, $client->toArray(), ConstantesDao::DELIM);
        }
        fclose($handle);
    }

    public function getById($motif): Client
    {
        return $this->getOneByAttribute(ClientDao::CHAMP_ID, $motif);
    }


    public function getAll(): array
    {
        $handle = fopen(ClientDao::FILE_SAVE_CLIENT, ConstantesDao::FILE_OPTION_R);
        $entities = [];

        $entetes = fgetcsv($handle, 0, ConstantesDao::DELIM);

        while (($entity = fgetcsv($handle, 0, ConstantesDao::DELIM)) != false) {
            $entities[] = Client::ClientFromArray(array_combine($entetes, $entity));
        }

        fclose($handle);
        return $entities;
    }

    public function getByNom(string $motif): ?array
    {
        return $this->getAllByAttribute(ClientDao::CHAMP_NOM, $motif);
    }

    public function deleteById(int $idEntity): void
    {
        $allEntities = $this->getAll();
        for ($i = 0; $i < count($allEntities); $i++) {
            if ($allEntities[$i]->getId() === $idEntity) {
                array_splice($allEntities, $i, 1);
            }
        }
        $this->saveAll($allEntities);
    }
    public function modify(Client $newEntity): void
    {
        $allEntities = $this->getAll();
        foreach ($allEntities as $currentEntity) {
           
            if ($currentEntity->getId() === $newEntity[ClientDao::CHAMP_ID]) {
                $currentEntity = $newEntity;
            }
        }
        $this->saveAll($allEntities);
    }


    public function save(Client $newClient): Client
    {
        $handle = fopen(ClientDao::FILE_SAVE_CLIENT, ConstantesDao::FILE_OPTION_A_PLUS);
        $newClient->setId($this->getNextId());
        $newClient->setNumeroClient("SM".str_pad($newClient->getId(), 6, "0", STR_PAD_LEFT));
        fputcsv($handle, $newClient->toArray(), ConstantesDao::DELIM);
        fclose($handle);
        return $newClient;
    }



    public function getNextId(): int
    {
        $handle = fopen(ClientDao::FILE_CPT_CLIENT, ConstantesDao::FILE_OPTION_A_PLUS);
        $currentId = intval(fgets($handle));
        $currentId++;
        fclose($handle);
        $handle = fopen(ClientDao::FILE_CPT_CLIENT, ConstantesDao::FILE_OPTION_W_PLUS);
        fputs($handle, $currentId);
        fclose($handle);
        return $currentId;
    }

    public function getOneByAttribute(string $attribute, string $motif): ?Client
    {
        $allEntities = $this->getAll();
        foreach ($allEntities as $entity) {
            $getter = "get".ucfirst($attribute);
            if (strtolower($entity->$getter()) === strtolower($motif)) {
                return $entity;
            }
        }
        return null;
    }
    public function getAllByAttribute(string $attribute, string $motif): array
    {
        $allEntities = $this->getAll();
        $entitiesCherchees = [];
        foreach ($allEntities as $entity) {
            $getter = "get".ucfirst($attribute);
            if (strtolower($entity->$getter()) === strtolower($motif)) {
                $entitiesCherchees[] = Client::ClientFromArray($entity);
            }
        }
        return $entitiesCherchees;
    }
}
