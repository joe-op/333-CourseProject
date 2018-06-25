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

