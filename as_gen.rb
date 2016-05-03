### agent
### 
### agents_id INT
### agent_phone VARCHAR(45)
### agent_email VARCHAR(45)
### agent_adress VARCHAR(45)

### stock_holder
### stock_holder_id INT
### first_name VARCHAR(30)
### last_name VARCHAR(30)
### company_company_id INT
### company_Headquarters_headquarter_id INT
require './agent_bot.rb'
require './stockholder_bot.rb'

abot = AgentBot.new
sbot = StockholderBot.new
File.open('agent.sql', "w") do|f|
  f.puts "/* Insert agent values */"
  f.puts abot.agents(5)
end
File.open('stockholder.sql', "w") do|f|
  f.puts "/* Insert stockholder values */"
  f.puts sbot.stockholders(20)
end

