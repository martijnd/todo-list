# Todo list
Simple app to try out any new features of Laravel 7

## Tables

**Users**

|     | Name              | Type          |
| --- | ----------------- | ------------- |
| PK  | id                | bigInt        |
|     | Name              | string        |
|     | email             | string unique |
|     | email_verified_at | timestamp     |
|     | password          | string        |

Timestamps, Soft-deletes

**Todos**

|     | Name    | Type       |
| --- | ------- | ---------- |
| PK  | id      | bigInteger |
| FK  | user_id | bigInteger |
|     | title   | string     |
|     | is_done | boolean    |

Timestamps, Soft-deletes
