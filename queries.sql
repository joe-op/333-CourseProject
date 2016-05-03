/* Determine the value of stocks in a specific location
 * Input: headquarter_id
 */
select close from company, stock_report
       where company.company_id = stock_report.company_id
       group by stock_report.company_id;;;;
       /* TODO get max date */

/* Determine the value of stocks in a specific field
 * Input: field
 */
 select close from company, stock_report, company_field
 	where company.company_id = stock_report.company_id
	and   company_field.field_id = company.field_id
	group by stock_report.company_id;
	/* TODO get max date */




/* Determine the stock history of a company (with an agent)
 * Input: company_id, agent_id
 */
 select open, close from company, stock_report
 	where; /* date in max, min for that company */

/* Find the history of a company's stocks
 * Input: company_id
 */
 select open, close from company, stock_report
 	where company.company_id = stock_report.company_id;
	/* date in max, min for that company */

/* All company information
 * Input: company_name or company_email
 */
 select * from company
 	where company_name = $company_name
	or company_email = $company_email;

/* All agent names and email addresses
 * Input: none
 */
 select agent_email, concat(agent_first_name, agent_last_name) as name
 	from agent
	order by agent_last_name desc;

/* Names and email addresses of agents with companies with improving stocks
 * Subquery: Find companies whose stocks have improved over the past month
 * Input: None
 */
 select agent_email, concat(agent_first_name, agent_last_name) as name
 	from agent, company, stock_report
	where agent.agent_id = company.agent_id
	and   company.company_id = stock_report.company_id
	;/* close on last day of month greater than open on first day of month */

/* Company names with their agent's name, email, and phone
 * Input: none
 */
 select company_name, concat(agent_first_name, " ", agent_last_name) as agent_name, agent_email, agent_phone
 	from company, agent
	where agent.agent_id = company.agent_id;

/* Company name and agent name by company phone
 * Input: company_phone
 */
 select company_name, concat(agent_first_name, " ", agent_last_name) as agent_name
 	from company, agent
	where agent.agent_id = company.agent_id
	and company.phone = $company_phone;

/* Company stock value by phone number
 * Input: company_phone
 */
 select close from stock_report, company
 	where company.company_id = stock_report.company_id
	and company.phone = $company_phone;

/* Names of fields
 * Input: none
 */
 select field_name from field;

/* Agents who have been assigned to a company in the past
 * TODO: modify this query since agent_history is not in the database
 * Input: company_id
 */

/* Agents assigned to less than 5 companies
 * TODO: modify this query since agents are now assigned to only one company
 * Input: none
 */

/* Stockholder names and numbers for a specific company, location, or field
 * Input: company_id or headquarter_id or field_id
 */
 /* Company */
 
select concat(stock_holder_first_name, " ", stock_holder_last_name) as stockholder_name
       from stock_holder, company
       where company.company_id = stock_holder.company_id
       and   company.company_id = $company_id;

/* Location */
select concat(stock_holder_first_name, " ", stock_holder_last_name) as stockholder_name
       from stock_holder, company,
       where company.company_id = stock_holder.company_id
       and   company.headquarter_id = $headquarter_id;


/* Field */
select concat(stock_holder_first_name, " ", stock_holder_last_name) as stockholder_name
       from stock_holder, company
       where company.company_id = stock_holder.company_id
       and   company.field_id = $field_id;
