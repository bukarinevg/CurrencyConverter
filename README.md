Copy code
# PHP Currency Conversion Project

This PHP project focuses on currency conversion utilizing an `InfoValute` class to fetch currency information from the [CBR Daily JSON API](https://www.cbr-xml-daily.ru/daily_json.js). Additionally, it involves an `InfoUserClass` that gathers user input regarding currencies and amounts, with the main controller class `ChangeClass` performing the actual currency conversion.

## Project Overview

The primary objective of this project is to provide a simple yet functional currency conversion system leveraging external API data and user-provided information. It consists of three main classes:

### InfoValute Class

- `InfoValute` is responsible for fetching live currency exchange rates from the [CBR Daily JSON API](https://www.cbr-xml-daily.ru/daily_json.js).
- It utilizes PHP's `file_get_contents` to retrieve data from the external API and decodes the JSON response for further usage.

### InfoUserClass

- `InfoUserClass` collects and stores user-specific information related to currency conversion.
- Users provide their  the currency they wish to convert from, the currency to convert to, and the amount to be converted.

### ChangeClass - Main Controller

- `ChangeClass` functions as the main controller class responsible for executing the currency conversion.
- It utilizes data fetched by `InfoValute` and user information from `InfoUserClass` to perform the actual currency conversion calculations.

## How to Use

### Setup Instructions

1. Clone the repository to your local environment.
    ```bash
    git clone https://github.com/your-username/currency-conversion.git
    ```

2. Ensure you have PHP installed on your system and that it supports fetching data from external URLs.

3. Review the `InfoValute`, `InfoUserClass`, and `ChangeClass` files for clarity on functionality and implementation details.


### Usage

1. Create an instance of `InfoUserClass` by providing user-specific currency conversion details.
2. Utilize the `ChangeClass::convertCurrency()` method, passing the user object to perform the conversion.
