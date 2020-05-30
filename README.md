# Todo list

## Tables

**Users**

|     | Name              | Type          |
| --- | ----------------- | ------------- |
| PK  | id                | bigInt        |
|     | Name              | string        |
|     | email             | string unique |
|     | email_verified_at | timestamp     |
|     | password          | string        |

Timetamps, Soft-deletes

**Todos**

|     | Name    | Type       |
| --- | ------- | ---------- |
| PK  | id      | bigInteger |
| FK  | user_id | bigInteger |
|     | title   | string     |
|     | is_done | boolean    |
