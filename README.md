rkr/postcodes
=============

A library to help converting from the outdated post-codes to icu-country-codes, vice versa. 

## Get a postcode for a ICU-code

```
$provider = new \Kir\PostCodes\PostCodeProvider();
echo $provider->getPostCodeFromIso3166('DE');
```

```
D
```

## Get a ICU-Code from a postcode

```
$provider = new \Kir\PostCodes\PostCodeProvider();
echo $provider->getIso3166CodeFromPostCode('D');
```

```
DE
```

## Get a list of all available ICU-codes

```
$provider = new \Kir\PostCodes\PostCodeProvider();
echo implode(', ', $provider->getAllIcuCodes());
```

```
AD, AE, AF, AG, AI, AL, AM, AN, AO, AQ, AR, AS, AT, ...
```

## Get a list of all available postcodes

```
$provider = new \Kir\PostCodes\PostCodeProvider();
echo implode(', ', $provider->getAllPostCodes());
```

```
AND, UAE, AFG, ANT, AIA, AL, ARM, NA, ANG, ...
```

## Get a key-value list of all available ICU-codes

```
$provider = new \Kir\PostCodes\PostCodeProvider();

print_r($provider->getIcuCodesToPostcodes());
```

```
['AD' => 'AND', 'AE' => 'UAE', 'AF' => 'AFG', 'AG' => 'ANT', ...]
```

## Get a key-value list of all available post-codes

```
$provider = new \Kir\PostCodes\PostCodeProvider();

print_r($provider->getPostcodesToIcuCodes());
```

```
['AND' => 'AD', 'UAE' => 'AE', 'AFG' => 'AF', 'ANT' => 'AG', ...]
```
