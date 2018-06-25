require 'faker'

### agent
### 
### agents_id INT
### agent_phone VARCHAR(45)
### agent_email VARCHAR(45)
### agent_address VARCHAR(45)


class AgentBot

  TABLE = "agent"
  COLS = %w(agent_id agent_phone agent_email agent_address agent_first_name agent_last_name)
  
  def initialize
  end

  def agents(num)
    str = agent_insert
    agent_strs = []
    1.upto(num) do|i|
      agent_strs.push(agent_value(i+2))
    end
    str += agent_strs.join(",\n") + ";"
    str
  end

  def agent_insert
    str = "INSERT INTO " + TABLE
    str += "(" + COLS.join(", ") + ")\n"
    str += "VALUES\n"
    str
  end


  def agent_value(agent_id=0)
    agent_firstname = Faker::Name.first_name.downcase
    agent_lastname = Faker::Name.last_name.downcase
    agent_address = ""
    agent_phone = ""
    
    str = "("
    values = [agent_id]
    # Get phone number like 222-222-2222 (may have extension)
    loop do
      agent_phone = Faker::PhoneNumber.phone_number
      if(i = (/\d{3}-\d{3}-\d{4}/ =~ agent_phone))
        agent_phone = agent_phone[i..-1]
        break
      end
    end
    values.push agent_phone
    values.push "#{agent_firstname}.#{agent_lastname}@cjm.com"
    # Get address less than 45 characters long
    loop do
      agent_address = [Faker::Address.street_address,
                       Faker::Address.city,
                       Faker::Address.country].join(',')
      break if(agent_address.length < 45)
    end
    values.push(agent_address)
    values.push(agent_firstname)
    values.push(agent_lastname)
    values.map!{|x| x = "\"#{x}\""}
    str += values.join(', ') + ')'
    str
  end

end
