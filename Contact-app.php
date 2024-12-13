<?php

$contacts = [];
// Add Contact
function addContact(array &$contacts, string $name, string $email, string $phone): void
{
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];

}

function displayContacts(array $contacts): void
{
    if (empty($contacts)) {
        echo "No contacts available.\n";
    } else {
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']} \n";
        }
    }
}
while(true){
    echo "Contact Management Menu\n";
    echo "\n 1. Add Contact\n 2. View Contacts \n 3. Exit\n";
    $choice = (int) readline ("Choose an option: ");
if($choice==1){
    $name= readline("Name ");
    $email= readline("email ");
    $phone= readline("phone ");
    addContact($contacts,$name,$email,$phone);
}
elseif($choice==2){
    displayContacts($contacts);
}else{
    echo "Exit";
    break;
}
}