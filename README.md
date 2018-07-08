# Toggl SDK

## About

PHP SDK to use [Toggl API v8](https://github.com/toggl/toggl_api_docs/blob/master/toggl_api.md) and [Toggl Reports API v2](https://github.com/toggl/toggl_api_docs/blob/master/reports.md)

## Installation

```
composer install kirianmurgadella/toggl-sdk
```

## Changelog

### 0.4.0

- Added get and set methods for api_token.
- Moved api_token hashing to authHeaders method. Now we save api_token plain an it's only hashed when is needed.

### 0.3.0

- Added Toggl Reports API. **Read-Only functionality**.

### 0.2.0

- Added an Interface for each Toggl API Repository. This allows to override MainApi class keeping al its Abstracts and Interfaces.
- Added Clients endpoints.

### 0.1.0

- Initial release. **Read-Only functionality**.