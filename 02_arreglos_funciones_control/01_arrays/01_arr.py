personas = {
    "Jesus": {
        "edad": 29,
        "ciudad": "GDL"
    },
    "Adrian": {
        "edad": 19,
        "ciudad": "OAX"
    },
}


for persona, detalles in personas.items():
    print(f"Nombre: {persona} \n")
    for clave, valor in detalles.items():
        print(clave, valor)