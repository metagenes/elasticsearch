# REST API Documentation

This is REST API using CodeIgniter and Elasticsearch for PHP. 

## Clone 

    git clone https://github.com/metagenes/elasticsearch

Save to your local server such as XAMPP in htdocs folder.

## Install

    composer install

## Run the app

    http://localhost/elasticsearch/index.php/product


# REST API

The REST API to the app is described below.

## Get list of Things

### Request

## Create a new Thing

### Request

`POST /product`

    curl -i -H 'Accept: application/json' -d 'index=pet_name&body=barbara' http://localhost/elasticsearch/index.php/product

### Response

{
    "_index": "pet_name",
    "_type": "_doc",
    "_id": "171147277",
    "_version": 1,
    "result": "created",
    "_shards": {
        "total": 2,
        "successful": 1,
        "failed": 0
    },
    "_seq_no": 1,
    "_primary_term": 1
}

## Search
`POST /search`

    curl -i -H 'Accept: application/json' -d 'index=pet_name&body=barbara' http://localhost/elasticsearch/index.php/search

### Response

{
    "took": 1285,
    "timed_out": false,
    "_shards": {
        "total": 1,
        "successful": 1,
        "skipped": 0,
        "failed": 0
    },
    "hits": {
        "total": {
            "value": 1,
            "relation": "eq"
        },
        "max_score": 0.6931471,
        "hits": [
            {
                "_index": "pet_name",
                "_type": "_doc",
                "_id": "171147277",
                "_score": 0.6931471,
                "_source": {
                    "testField": "barbara"
                }
            }
        ]
    }
}
