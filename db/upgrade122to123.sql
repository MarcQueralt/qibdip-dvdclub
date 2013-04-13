/* Create new field */
alter table copies
add column label int(10) not null;
/* Copy id value in label */
update copies set label=id;