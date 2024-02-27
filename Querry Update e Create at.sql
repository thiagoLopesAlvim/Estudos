SELECT TOP (1000) [id]
      ,[tipconsulta]
      ,[status]
      ,[nomecliente]
      ,[telfone]
      ,[CPF]
      ,[endereco]
      ,[observacao]
      ,[tippagamento]
      ,[created_at]
      ,[updated_at]
  FROM [laravel].[dbo].[consultas]


  Alter table [consultas] add created_at varchar(30);
    Alter table [consultas] add updated_at varchar(30);


	Alter table [consultas] drop column created_at ;
    Alter table [consultas] drop column updated_at ;