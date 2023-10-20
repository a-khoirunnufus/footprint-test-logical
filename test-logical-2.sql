-- query item quantity for item with id = 1
select quantity
from item
where id = 1;



-- query total sales for item with id = 1 in month = january
select sum(total_price) as total_sales
from transaction
where item_id = 1 and month(time) = 1;



-- query total profit at 2023-10-20
select sum((t.item_sell_price - i.buy_price) * t.quantity) as profit
from transaction as t
    join item as i on i.id = t.item_id
where date(time) = '2023-10-20';