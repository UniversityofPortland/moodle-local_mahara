= Mahara Local Plugin

This plugin allows your Moodle installation to subscribe to Mahara XML-RPC endpoints. Included is a table housing
portfolio's pulled from Mahara by other plugins.

While it original purpose is a requirement for the [Maraha assignment plugins][1], it can easlity be extending to
support more XML-RPC endpoints.

== Installation

Install of the plugin is very easy. There are two installtion methods:

1. Download the source archive for this plugin, and extract at the following location: `{Moodle_Root}/local/mahara`
2. Execute the following command:

```
> git clone git@github.com:philcali/local-mahara.git {Moodle_Root}/local/mahara
```

The remaining installation is taken care of by Moodle, by clicking on *Notifications*.

== Associated plugins

There are currently two plugins that require this integration:

1. [Mahara assignment submissions][1]
2. [Mahara assignment feedback][2]

[1]: https://github.com/philcali/assign-mahara
[2]: https://github.com/philcali/assign-mahara-feedback
