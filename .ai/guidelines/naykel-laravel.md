# Naykel Laravel & PHP Guidelines (Reference)

## Core Laravel Principle

**Follow Laravel conventions first.** If Laravel has a documented way to do
something, use it. Only deviate when you have a clear justification.

## PHP Standards

- Use short nullable notation: `?string` not `string|null`
- Always specify `void` return types when methods return nothing
- Use typed properties over docblocks
- Prefer early returns over nested if/else
- Use constructor property promotion when all properties can be promoted
- Avoid `else` statements when possible
- Use string interpolation over concatenation

## Migrations

- Do not write down methods in migrations, only up methods

### Column Type Guidelines

- `price`, `stock`, `quantity`, `unit_price`, `total`, `amount` → type depends
  on usage:
  - **Product prices / fixed values** → `bigint unsigned`
  - **Ledger / transactions** → signed (`bigint` or `integer`)

### Price and Amount Fields

- `price` and `amount` fields should be nullable WITHOUT a default value
  - Reasoning: A record without a price/amount shouldn't exist in the database
  - Use `NULL` to indicate draft/incomplete records if needed
  - Avoid default `0` as it creates ambiguity between "free" and "not set"
- `unit_price` is signed (`bigint` or `integer`) to allow negative values for
  credits/adjustments on order line items
