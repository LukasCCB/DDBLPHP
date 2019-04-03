# DDBLPHP
Divine Discord Bot List API in PHP

```
Authorization: "yes"
Ratelimit: 1 minute
Parameters:
BotId (string)
Token (string)
ServerCount (int)
```


Example Usage:

```
include("DDBL.php");

$ddbl = new DDBL();

$ddbl->Initialize("BOT ID HERE", "TOKEN HERE");
$ddbl->PostStats(SERVER COUNT HERE);
```

