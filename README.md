# WP Cloudflare IP Rewrite

A simple, drop in plugin to get the correct client IP behind CloudFlare.

### Installation
Just download drop this folder in your `/plugins/` directory and activate it.

### How it works
It checks if the `REMOTE_ADDR` is from CloudFlare (for security) and then sets `REMOTE_ADDR` to `HTTP_CF_CONNECTING_IP` to ensure we get the real client IP.

### Todos
It would be nice if the plugin was self-maintaining for getting authorized CloudFlare IP's. We should update the `$cf_ipv4` and `$cf_ipv6` arrays to fetch them on a nightly cron and store as a transient.

### Credits
This is 98% [CloudFlare's IP Rewrite Package](https://github.com/cloudflare/cf-ip-rewrite), just wrapped into a WP Plugin that we can later extend.
