```json
{
"Dhcp4": {
    "interfaces-config": {
	//¿En qué interfaz queremos que escuche nuestro servidor DHCP?
	 "interfaces": ["???"]
	//,
	//Se puede configurar el tipo de socket, que por defecto será raw
	 //"dhcp-socket-type": "raw"
    },
    //Los sockets de control se pueden usar para recargar la configuración de Kea en tiempo de ejecución, de manera predeterminada se define el siguiente socket de control:
    "control-socket": {
        "socket-type": "unix",
        "socket-name": "/run/kea/kea4-ctrl-socket"
    },
    "lease-database": {
	//¿Para qué sirve este aspecto de la configuración y de qué otras opciones dispone Kea?
        "type": "memfile",
	//Intervalo en que se simplifica el archivo de concesiones (lease file cleanup)
        "lfc-interval": 3600
    },	
    //¿Para qué sirve cada uno de los siguientes parámetros y de qué modo afectan sus valores al comportamiento de la relación entre el servidor y los clientes?
    "renew-timer": 90,
    "rebind-timer": 100,
    "valid-lifetime": 300,
    "option-data": [
        {
            //Sustituye por el valor de tu red
	    "name": "domain-name-servers",
            "data": "10.0.XXX.2, 10.0.XXX.1"
        },
        {
            //En lugar de especificarlo con el nombre se puede especificar con el número de mensaje, ¿cuál es en este caso?
	    "code": 15,
            //Sustituye por el valor de tu red
            "data": "asir00.asir"
        },
        {
            "name": "domain-search",
            //Sustituye por el valor de tu red
            "data": "asir00.asir"
        },
        {
            //¿Para qué sirve el parámetro de configuración boot-file-name?
	    "name": "boot-file-name",
            "data": "EST5EDT4\\,M3.2.0/02:00\\,M11.1.0/02:00"
        },
        {
            //¿Para qué sirve el parámetro de configuración default-ip-ttl?            
	    "name": "default-ip-ttl",
            "data": "0xf0"
        }
    ],
    "subnet4": [
        {
            
	    //El pool de direcciones que se pueden otorgar será de 20 a partir de la 20
	    "subnet": "10.0.XXX.0/24",
            "pools": [ { "pool": "10.0.128.YY - 10.0.128.ZZ" } ],
            "option-data": [
                {
                   //¿Para qué sirve el parámetro routers?
		    "name": "routers",
          	  //Sustituye por el valor de tu red, si lo tienes
                    "data": "10.0.XXX.254"
                }
            ]
        }
    ],
    //¿Qué otras opciones tenemos en cuanto a la depuración y almacenamiento de mensajes?
    "loggers": [
    {
        "name": "kea-dhcp4",
        "output_options": [
            {
                "output": "stdout",
                "pattern": "%-5p %m\n"
            }
        ],

        "severity": "INFO",
        "debuglevel": 0
    }
  ]
}
}
```