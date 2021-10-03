<?php

include "./fonctions.php";
if (!isset($personnes)) {
    $personnes = [];
}
$save = fopen("./exo2-save.txt", "r");
$saveTmp = fopen("./exo2-save-tmp.txt", "w+");
while (!feof($save)) {
    $ligne = fgets($save);
    $ligne = str_replace("|", ",", $ligne);
    fwrite($saveTmp, $ligne);
}
fclose($save);
fclose($saveTmp);

saveToArray($filename = "./exo2-save-tmp.txt", $delimiter = ",", $personnes);
replaceId($personnes);
arrayToSave($filename = "./exo2-save.txt", $personnes, $header = array('id', 'nom', 'prenom', 'sexe', 'DateDeNaissance', 'numeroTel', 'mail', 'adresseNumero', 'adresseRue', 'adresseComplement', 'adresseCodePostal', 'adresseVille', 'adressePays'));

while (true) {
    echo (PHP_EOL);
    echo (" a. Ajouter une personne." . PHP_EOL .
        " b. afficher la liste des personnes." . PHP_EOL .
        " c. Chercher une personne par (id_personne, nom, prénom, email)." . PHP_EOL .
        " d. Modifier une personne par id_personne." . PHP_EOL .
        " e. Supprimer une personne par id_personne. (Ajout de message de confirmation avant la suppression)." . PHP_EOL .
        " f. Quitter" . PHP_EOL . PHP_EOL);

    $choixMenu = readline("Votre choix : ");
    echo (PHP_EOL);
    while (!preg_match("#^[a-f]$#", $choixMenu)) {
        $choixMenu = readline("Invalide! refaire votre choix : ");
        echo (PHP_EOL);
    }

    if ($choixMenu == "f") {
        break;
    } elseif ($choixMenu == "a") {
        while (true) {

            $personne["id"] = str_pad((count($personnes) + 1), 6, 0, STR_PAD_LEFT);

            $personne["nom"] =  strtoupper(readline("Veuillez entrer le nom de la personne : "));
            while (!preg_match("#^[a-zA-Z]+([- ]?[a-zA-Z]+)?$#", $personne["nom"])) {
                $personne["nom"] = strtoupper(readline("Saisie invalide, Veuillez entrer un nom valide : "));
            }

            $personne["prenom"] = ucwords(strtolower(readline("Veuillez entrer le prénom de la personne : ")));
            while (!preg_match("#^[a-zA-Z]+([- ]?[a-zA-Z]+)?$#", $personne["prenom"])) {
                $personne["prenom"] = ucwords(strtolower(readline("Saisie invalide, Veuillez entrer un prenom valide : ")));
            }

            $personne["sexe"] = strtolower(readline("Sexe de la personne (h/f/n) : "));
            while ($personne["sexe"] != "h" && $personne["sexe"] != "f" && $personne["sexe"] != "n") {
                $personne["sexe"] = strtolower(readline("Saisie invalide, sexe de la personne (h/f/n) : "));
            }

            $personne["DateDeNaissance"] = readline("Veuillez entrer la date de naissance (format: JJMMAAAA) : ");

            while (!preg_match("#^(0?[1-9]|[1-2][0-9]|3[0-1])(0?[0-9]|1[0-2])(19[0-9]{2}|20[0-1]{1}[0-9]{1})$#", $personne["DateDeNaissance"])) {
                $personne["DateDeNaissance"] = readline("Saisie invalide, Veuillez entrer la date de naissance (format: JJMMAAAA) : ");
            }

            $personne["numeroTel"] = readline("Veuillez entrer le numéro de téléphone (xxxxxxxxxx) : ");
            while (!preg_match("#^0[1-9][0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}$#", $personne["numeroTel"])) {
                $personne["numeroTel"] = readline("Saisie invalide, Veuillez entrer le numéro de téléphone (xxxxxxxxxx) : ");
            }

            $personne["mail"] = readline("Veuillez entrer l'adresse mail de la personne : ");
            while (!filter_var($personne["mail"], FILTER_VALIDATE_EMAIL)) {
                $personne["mail"] = readline("Saisie invalide, Veuillez entrer une adresse mail valide : ");
            }

            $personne["adresseNumero"] = readline("Entrer le Numéro de la rue : ");
            while (!preg_match("#^[0-9]+([- ][a-zA-Z]{1,4})?$#", $personne["adresseNumero"])) {
                $personne["adresseNumero"] = readline("Saisie invalide, Entrer le Numéro de la rue : ");
            }

            $personne["adresseRue"] = readline("Entrer le nom de la rue : ");
            while (!preg_match("#^[a-zA-Z]+( [a-zA-Z]+)*$#", $personne["adresseRue"])) {
                $personne["adresseRue"] = readline("Saisie invalide, Entrer le nom de la rue : ");
            }

            $personne["adresseComplement"] = strtolower(readline("Entrer un complément d'adresse (ou laisser vide) : "));
            while (!preg_match("#^[a-zA-Z]*$#", $personne["adresseComplement"])) {
                $personne["adresseComplement"] = strtolower(readline("Saisie invalide, Entrer un complément d'adresse (ou laisser vide) : "));
            }

            $personne["adresseCodePostal"] = readline("Entrer le code postal : ");
            while (!preg_match("#^[0-9]{5}$#", $personne["adresseCodePostal"]) || $personne["adresseCodePostal"] == 0) {
                $personne["adresseCodePostal"] = readline("Saisie invalide, Entrer le code postal : ");
            }

            $personne["adresseVille"] = strtoupper(readline("Entrer la ville : "));
            while (!preg_match("#^[a-zA-Z]+-*[a-zA-Z]*$#", $personne["adresseVille"])) {
                $personne["adresseVille"] = strtoupper(readline("Saisie invalide,  Entrer la ville : "));
            }

            $personne["adressePays"] = ucwords(strtolower(readline("Entrer le pays : ")));
            while (!preg_match("#^[a-zA-Z]+$#", $personne["adressePays"])) {
                $personne["adressePays"] = ucwords(strtolower(readline("Saisie invalide, Entrer le pays : ")));
            }

            $personnes[] = $personne;
            replaceId($personnes);
            arrayToSave($filename = "./exo2-save.txt", $personnes, $header = array_keys($personne));

            break;
        }
    } elseif ($choixMenu == "b") {
        echo ("Liste des personnes : " . PHP_EOL . PHP_EOL);
        $save = fopen("./exo2-save.txt", "r");
        $cpt = 0;
        while (!feof($save)) {
            if ($cpt == 0) {
                $ligne = fgets($save);
                $cpt++;
            } else {
                $ligne = fgets($save);
                echo ($ligne);
            }
        }
        fclose($save);
        echo (PHP_EOL . PHP_EOL);
    } elseif ($choixMenu == "c") {
        while (true) {
            echo ("Rechercher le client par : " . PHP_EOL . PHP_EOL);
            echo (" 1. id_personne." . PHP_EOL .
                " 2. nom." . PHP_EOL .
                " 3. prénom." . PHP_EOL .
                " 4. email." . PHP_EOL .
                " 5. Quitter" . PHP_EOL . PHP_EOL);

            $choixMenu = readline("Votre choix : ");
            echo (PHP_EOL);
            while (!preg_match("#^[1-5]$#", $choixMenu)) {
                $choixMenu = readline("Invalide! refaire votre choix : ");
                echo (PHP_EOL);
            }
            if ($choixMenu == "5") {
                break;
            } elseif ($choixMenu == "1") {
                $save = fopen("./exo2-save.txt", "r");
                $cptCherche = count($personnes);
                $personneCherchee = readline("Entrer l'identifiant (000001 <=> 00000" . $cptCherche . ") : ");
                while (!preg_match("#^\d{6}$#", $personneCherchee) || $personneCherchee > $cptCherche) {
                    $personneCherchee = readline("Invalide! Entrer l'identifiant (000001 <=> 00000" . $cptCherche . ") : ");
                }
                $cptPersonneTrouvee = 0;
                echo (PHP_EOL . "Personne trouvée : " . PHP_EOL . PHP_EOL);
                while (!feof($save)) {
                    $ligne = fgets($save);
                    if (preg_match("#$personneCherchee#", $ligne)) {
                        $cptPersonneTrouvee++;
                        echo ($ligne);
                    }
                }
                fclose($save);
                if ($cptPersonneTrouvee == 0) {
                    echo ("Aucun résultat." . PHP_EOL . PHP_EOL);
                }
                echo (PHP_EOL . PHP_EOL);                
            } elseif ($choixMenu == "2") {
                $personneCherchee =  strtoupper(readline("Veuillez entrer le nom de la personne  recherchée : "));
                while (!preg_match("#^[a-zA-Z]+([- ]?[a-zA-Z]+)?$#", $personneCherchee)) {
                    $personneCherchee = strtoupper(readline("Saisie invalide, Veuillez entrer un nom valide : "));
                }
                $personneTrouvee = 0;
                $cptPersonneTrouvee = 0;
                echo (PHP_EOL . "Personne(s) trouvée(s) : " . PHP_EOL . PHP_EOL);
                foreach ($personnes as $personne) {
                    foreach ($personne as $key => $value) {
                        if ($key == 'nom' && $value == $personneCherchee) {
                            $personneTrouvee = $personne["id"];
                            $cptPersonneTrouvee++;
                            $save = fopen("./exo2-save.txt", "r");
                            while (!feof($save)) {
                                $ligne = fgets($save);
                                if (preg_match("#$personneTrouvee#", $ligne)) {
                                    echo ($ligne);
                                }
                            }
                            fclose($save);
                        }
                    }
                }
                if ($personneTrouvee == 0) {
                    echo ("Aucun résultat." . PHP_EOL . PHP_EOL);
                }
                echo (PHP_EOL . PHP_EOL);
            } elseif ($choixMenu == "3") {
                $personneCherchee = ucwords(strtolower(readline("Veuillez entrer le prénom de la personne recherchée : ")));
                while (!preg_match("#^[a-zA-Z]+([- ]?[a-zA-Z]+)?$#", $personneCherchee)) {
                    $personneCherchee = ucwords(strtolower(readline("Saisie invalide, Veuillez entrer un prénom valide : ")));
                }
                $personneTrouvee = 0;
                $cptPersonneTrouvee = 0;
                echo (PHP_EOL . "Personne(s) trouvée(s) : " . PHP_EOL . PHP_EOL);
                foreach ($personnes as $personne) {
                    foreach ($personne as $key => $value) {
                        if ($key == 'prenom' && $value == $personneCherchee) {
                            $personneTrouvee = $personne["id"];
                            $cptPersonneTrouvee++;
                            $save = fopen("./exo2-save.txt", "r");
                            while (!feof($save)) {
                                $ligne = fgets($save);
                                if (preg_match("#$personneTrouvee#", $ligne)) {
                                    echo ($ligne);
                                }
                            }
                            fclose($save);
                        }
                    }
                }
                if ($personneTrouvee == 0) {
                    echo ("Aucun résultat." . PHP_EOL . PHP_EOL);
                }
                echo (PHP_EOL . PHP_EOL);
            } elseif ($choixMenu == "4") {
                $personneCherchee = readline("Veuillez entrer l'adresse mail de la personne : ");
                while (!filter_var($personneCherchee, FILTER_VALIDATE_EMAIL)) {
                    $personneCherchee = readline("Saisie invalide, Veuillez entrer une adresse mail valide : ");
                }
                $personneTrouvee = 0;
                $cptPersonneTrouvee = 0;
                echo (PHP_EOL . "Personne(s) trouvée(s) : " . PHP_EOL . PHP_EOL);
                foreach ($personnes as $personne) {
                    foreach ($personne as $key => $value) {
                        if ($key == 'mail' && $value == $personneCherchee) {
                            $personneTrouvee = $personne["id"];
                            $cptPersonneTrouvee++;
                            $save = fopen("./exo2-save.txt", "r");
                            while (!feof($save)) {
                                $ligne = fgets($save);
                                if (preg_match("#$personneTrouvee#", $ligne)) {
                                    echo ($ligne);
                                }
                            }
                            fclose($save);
                        }
                    }
                }
                if ($personneTrouvee == 0) {
                    echo ("Aucun résultat." . PHP_EOL . PHP_EOL);
                }
                echo (PHP_EOL . PHP_EOL);
            }
        }
    } elseif ($choixMenu == "d") {
        while (true) {
            $cptCherche = count($personnes);
            $personneCherchee = readline("Entrer l'identifiant (000001 <=> 00000" . $cptCherche . ") : ");
            while (!preg_match("#^\d{6}$#", $personneCherchee) || $personneCherchee > $cptCherche) {
                $personneCherchee = readline("Invalide! Entrer l'identifiant (000001 <=> 00000" . $cptCherche . ") : ");
            }
            $cptPersonneTrouvee = 0;
            $personneTrouvee = 0;
            echo (PHP_EOL . "Personne(s) trouvée(s) : " . PHP_EOL . PHP_EOL);
            foreach ($personnes as $keys => $personne) {
                foreach ($personne as $key => $value) {
                    if ($key == 'id' && $value == $personneCherchee) {
                        $personneTrouvee++;
                        $save = fopen("./exo2-save.txt", "r");
                        while (!feof($save)) {
                            $ligne = fgets($save);
                            if (preg_match("#$personneCherchee#", $ligne)) {
                                echo ($ligne . PHP_EOL);
                            }
                        }
                        fclose($save);
                        break 2;
                    }
                }
            }
            if ($personneTrouvee == 0) {
                echo ("Aucun résultat." . PHP_EOL . PHP_EOL);
            } else {
                while (true) {
                    echo ("Eléments modifiables : " . PHP_EOL . PHP_EOL);
                    foreach ($personne as $key => $value) {
                        if ($key == "id") {
                            echo (" - \--- " . $key . " : " . $value . " \---. <= NON MODIFIABLE" . PHP_EOL);
                        } else {
                            echo (" - " . $key . " : " . $value . "." . PHP_EOL);
                        }
                    }
                    echo (PHP_EOL);
                    $eltModif = readline("Quel élément voulez vous modifier : ");
                    while (!isset($personnes[$keys][$eltModif])) {
                        $eltModif = readline("élément introuvable! Quel élément voulez vous modifier : ");
                    }
                    echo (PHP_EOL);
                    $NouvelleEntree = readline("Nouvelle valeur : ");
                    $eltTrouve = 0;
                    echo (PHP_EOL . PHP_EOL);
                    while (true) {
                        $eltModifSecu = readline("Voulez-vous vraiment modifier l'élément " . $eltModif . " ? oui / non : ");
                        while ($eltModifSecu != "oui" && $eltModifSecu != "non") {
                            $eltModifSecu = readline("Saisie incorrecte : voulez-vous vraiment modifier l'élément " . $value . " ? oui / non : ");
                        }
                        if ($eltModifSecu == "oui") {
                            $personnes[$keys][$eltModif] = $NouvelleEntree;
                            replaceId($personnes);
                            arrayToSave($filename = "./exo2-save.txt", $personnes, $header = array_keys($personne));
                            $eltModifSecu = readline("Voulez-vous modifier un autre élément (ou personne) ? oui / non : ");
                            while ($eltModifSecu != "oui" && $eltModifSecu != "non") {
                                $eltModifSecu = readline("Saisie incorrecte : voulez-vous modifier un autre élément (ou personne) ? oui / non : ");
                            }
                            if ($eltModifSecu == "oui") {
                                break 2;
                            } elseif ($eltModifSecu == "non") {
                                break 3;
                            }
                        } elseif ($eltModifSecu == "non") {
                            break 3;
                        }
                    }
                }
            }
        }
    } elseif ($choixMenu == "e") {
        while (true) {
            $cptCherche = count($personnes);
            $personneCherchee = readline("Entrer l'identifiant (000001 <=> 00000" . $cptCherche . ") : ");
            while (!preg_match("#^\d{6}$#", $personneCherchee) || $personneCherchee > $cptCherche) {
                $personneCherchee = readline("Invalide! Entrer l'identifiant (000001 <=> 00000" . $cptCherche . ") : ");
            }
            $cptPersonneTrouvee = 0;
            $personneTrouvee = 0;
            echo (PHP_EOL . "Personne(s) trouvée(s) : " . PHP_EOL . PHP_EOL);
            foreach ($personnes as $keys => $personne) {
                foreach ($personne as $key => $value) {
                    if ($key == 'id' && $value == $personneCherchee) {
                        $personneTrouvee++;
                        $save = fopen("./exo2-save.txt", "r");
                        while (!feof($save)) {
                            $ligne = fgets($save);
                            if (preg_match("#$personneCherchee#", $ligne)) {
                                echo ($ligne . PHP_EOL);
                            }
                        }
                        fclose($save);
                        break 2;
                    }
                }
            }
            if ($personneTrouvee == 0) {
                echo ("Aucun résultat." . PHP_EOL . PHP_EOL);
                readline("Continuer ...");
            break;
            } else {
                while (true) {
                    $eltModifSecu = readline("Voulez-vous vraiment supprimer cette personne ? oui / non : ");
                    while ($eltModifSecu != "oui" && $eltModifSecu != "non") {
                        $eltModifSecu = readline("Saisie incorrecte : Voulez-vous vraiment supprimer cette personne ? oui / non : ");
                    }
                    if ($eltModifSecu == "oui") {
                        unset($personnes[$keys]);
                        replaceId($personnes);
                        arrayToSave($filename = "./exo2-save.txt", $personnes, $header = array_keys($personne));
                        $eltModifSecu = readline("Voulez-vous supprimer une autre personne ? oui / non : ");
                        while ($eltModifSecu != "oui" && $eltModifSecu != "non") {
                            $eltModifSecu = readline("Saisie incorrecte : voulez-vous une autre personne ? oui / non : ");
                        }
                        if ($eltModifSecu == "oui") {
                            break 1;
                        } elseif ($eltModifSecu == "non") {
                            break 2;
                        }
                    } elseif ($eltModifSecu == "non") {
                        break 2;
                    }
                }
            }
        }
    }
}
