# Laravel NightWatch
This document outlines the Laravel NightWatch standards for using in your application

### Requirements
**Documentation**: https://nightwatch.laravel.com/docs/getting-started/start-guide

 **To use NightWatch** you will need an api key (we already put the env variables at 
```.env.example```)


```dotenv
 LOG_STACK=single,nightwatch
 
 NIGHTWATCH_TOKEN=your-api-key
```
#### Running NightWatch
```bash
php artisan nightwatch:agent
```

### Forge
**Automatic Integration**
https://nightwatch.laravel.com/docs/guides/forge#prerequisites

**Manual Integration (Daemon Configuration)**
https://nightwatch.laravel.com/docs/guides/forge#example-daemon-configuration

