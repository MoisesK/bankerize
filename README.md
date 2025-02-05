## Mini Bankerize


## Objective

A mini Bankerize é uma API para cadastro de propostas em um sistema de terceiro que eventualmente fica indisponivel e
além disso você precisa enviar um email ou sms para uma API de terceiro que também pode ficar eventualmente indisponivel.

Você precisa conseguir realizar o cadastro completamente em 100% das vezes se retornar falhas para o usuario final.

--

Mini Bankerize is an API for registering proposals in a third-party system that may eventually become unavailable and
in addition, you need to send an email or SMS to a third-party API that may also eventually become unavailable.

You need to be able to complete the registration 100% of the time if it returns errors to the end user.

## Used Technologies

- PHP 8.2
- Docker
- Mysql
- DDD (Domain Driven Develop)
- TDD (Test Driven Develop)
- SOLID Principles
    - Single Responsability (Uma classe deve ter um, e somente um, motivo para mudar)
    - Open-Closed Principle (Objetos ou entidades devem estar abertos para extensão, mas fechados para modificação)
    - Liskov Substitution Principle (Uma classe derivada deve ser substituível por sua classe base.)
    - Interface Segregation Principle (Uma classe não deve ser forçada a implementar interfaces e métodos que não irão utilizar.)
    - Dependency Inversion Principle (Dependa de abstrações e não de implementações.)
- Clean Arch
- Repository Pattern
- Ports and Adapters Concept
- PSR's
    - 1 Basic Coding Standard
    - 3 Logger Interface
    - 4 Autoloader
    - 12 Extended Coding Style Guide