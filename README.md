# Farm to Fridge

Farm to Fridge is an open source, online farmer's market.  It is in early alpha
development.

The plan is to develop it in three modules: farm stand, csa, and market.
Wrapping all three will be [farmtofridge.net](farmtofridge.net) a website that
will host instances of each of the modules for users who do not wish to host
their own.  Each module will be independent of the wrapping website and will be
built into stand alone web applications that may be deployed to user's servers.

Each module serves a different purpose or scale, but all relate to the selling
of food from farms directly to consumers.

Farm Stand is for a single farm to run an online farm stand and market place to
sell its produce to consumers.  It can double as the farmer's website.

CSA will allow a single farm to run a CSA with online payment and share
management.  It can also double as the farm's website or be used along side
Farm Stand.

Market allows a farmer's guild or farmer's market to run an online marketplace
for multiple farms and CSAs.  It is to be used by farmer's markets or
cooperatives of farmers who want to coordinate distribution through a single
marketplace.

In each case, distribution can take several forms (pickup or delivery) but is
the responsibility of the farmer or farmers running the software.

## Architecture

Farm to Fridge is built in PHP on the Laravel framework and is backed by a
MySQL database.  These choices were made because PHP is still the language that
is easiest to manage for someone with limited tech knowledge.
