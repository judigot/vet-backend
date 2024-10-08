/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IUserUserType } from "../../interfaces/interfaces";

type IBody = Omit<IUserUserType, 'id'>;

export const createUserUserType = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/user_user_types`,
    body: JSON.stringify(formData),
  });
  return result;
};

