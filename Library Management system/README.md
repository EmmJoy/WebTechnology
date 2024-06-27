
# Libarary Management System

It's a library management system. where you can take you by giving you id and name . In the same time you cannot take two book . If you try to take two book the you will face error.

After removing previous cookies you can borrow another book from library.


## API Reference

#### Get all items

```http
  GET /api/items
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **Required**. Your API key |

#### Get item

```http
  GET /api/items/${id}
```

| Parameter | Type  
| Description                       |
| :-------- | :------- | :-------------------------------- |
| `id`      | `string` | **Required**. Id of item to fetch |

#### add(num1, num2)

Takes two numbers and returns the sum.


## Authors

- [@EmmJoy](https://github.com/EmmJoy)


## Screenshots

![image](https://github.com/EmmJoy/WebTechnology/assets/124621939/b7ea46ed-ecac-4587-873d-baedab3f4471)

After submitting 
![image](https://github.com/EmmJoy/WebTechnology/assets/124621939/d2726f5f-75c8-445c-9a39-77a0fcf3275f)

using the same id and name ..anyone cannot borrow two book at the same time . he/she can borrow only one book..
![image](https://github.com/EmmJoy/WebTechnology/assets/124621939/2c6e82fb-7816-47ff-8ff9-6184b5cfc785)


