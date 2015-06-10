# ADF Parser #
Suprisingly parses ADF files.

## Purpose #
To parse an ADF File (Auto-lead Data Format) and return the relevant information in an easy to use structure.

## Installation #

In your composer.json file add the following to your require array:
```
"vicimus/adfparser": "dev-master"
```

In your composer.json file add the following to your repositories array:
```
git@github.com:Vicimus/ADFParser.git
```

## Usage #

### Parsing #
Currently the parser only parses a string, so you've got to read the contents of the file into a string and then pass the string. Other parse methods will most likely be created in the future to reduce the steps neccessary before parsing.

Parse an ADF file by calling the static method parseString. This will return an ADFParser object with the parsed data.

```
$adf = ADFParser::parseString(file_get_contents('my/adf/file.adf'));
```

### Using The Data #

An ADF file is made up of three (an an optional fourth) distinct sections of information. Vehicle, Customer, Vendor and Provider (Optional).

The ADFParser is made up of these sections, each with their own properties. The parser mirrors the structure of the adf file.

For example, a customers contact information is stored inside a contact object within the customer. A vendors contact information is stored inside a contact object within the vendor, and so on.

Read the ADF Spec for a full list of properties, and to fully understand the structure, or simply var_dump the $adf object.

### Examples #

Getting the customer name:
```
$name = $adf->customer->contact->name
```

Getting the customers phone number (phone numbers are stored in an array, because the ADF file can provide multiple phone numbers)
```
$phone = $adf->customer->contact->phone[0]->number;
```

Getting the vehicle information
```
$vehicle = $adf->vehicle->year.' '.$adf->vehicle->make.' '.$adf->vehicle->model
```
