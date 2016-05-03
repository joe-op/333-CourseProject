require 'faker'

class StockholderBot

  TABLE = 'stock_holder'
  COLS = %w(stock_holder_id stock_holder_first_name stock_holder_last_name company_id)
  COMPANY_ID_MAX = 5

  def initialize
  end

  def stockholders(num)
    str = stockholder_insert
    stockholder_strs = []
    1.upto(num) do|i|
      stockholder_strs.push stockholder_value(i+2)
    end
    str += stockholder_strs.join(",\n") + ";"
    str
  end

  def stockholder_insert
    str = "INSERT INTO " + TABLE
    str += "(" + COLS.join(", ") + ")\n"
    str += "VALUES\n"
    str
  end

  def stockholder_value(stock_holder_id=0)
    str = "("
    values = [stock_holder_id]
    values.push Faker::Name.first_name
    values.push Faker::Name.last_name
    # Surround string values with quotes
    values.map!{|x| "\"#{x}\""}

    values.push rand(COMPANY_ID_MAX) + 1
    str += values.join(", ") + ")"
    str
  end
    
end
