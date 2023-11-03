# Static API

This PHP script functions as an API to retrieve interesting facts about cats.

## PHP Version and Requirements

- **PHP Version**: 8.0 or higher
- **Dependencies**: None

## Description

The API serves cat-related information in JSON format. It offers two main functionalities:

- **Retrieve all cat facts**: Fetch all available cat facts in the database.
- **Retrieve a specific cat fact by ID**: Get a specific cat fact based on its unique ID.

## Endpoints

### Get all cat facts

- **URL**: `/facts/random`
- **Method**: `GET`
- **Description**: Fetches all available cat facts.

### Get a specific cat fact

- **URL**: `/facts/{fact_id}`
- **Method**: `GET`
- **Description**: Retrieves a specific cat fact by its ID.

## Usage

### Running the PHP Script

To run the PHP script from the command line, navigate to the static-api directory where the index.php file is located and use the following command:

```bash
php -S localhost:1000
```

This command will start a local PHP server on `http://localhost:1000` by default. Adjust the port number if needed.

### Retrieving all cat facts

Send a `GET` request to `/facts`:

```bash
curl -X GET http://localhost:1000/facts
```

### Retrieving a specific cat fact

To fetch a specific cat fact, replace `{fact_id}` in the URL with the desired fact's ID:

```bash
curl -X GET http://localhost:1000/facts/591f9894d369931519ce358f
```

or

```bash
curl -X GET http://localhost:1000/facts/591f9854c5cbe314f7a7ad34
```

## Sample Response

The API will respond with JSON data in the following structure:

```json
[
    {
        "_id": "591f9894d369931519ce358f",
        "__v": 0,
        "text": "A female cat will be pregnant for approximately 9 weeks - between 62 and 65 days from conception to delivery.",
        "updatedAt": "2018-01-04T01:10:54.673Z",
        "deleted": false,
        "source": "api",
        "sentCount": 5
    },
    {
        "_id": "591f9854c5cbe314f7a7ad34",
        "__v": 0,
        "text": "It has been scientifically proven that stroking a cat can lower one's blood pressure.",
        "updatedAt": "2018-01-04T01:10:54.673Z",
        "deleted": false,
        "source": "api",
        "sentCount": 3
    }
]
```

## Note

Please replace the localhost URL and port number in the `curl` commands with the actual server address where the PHP script is hosted.

Ensure your system has PHP installed and configured before running the script using the command line.